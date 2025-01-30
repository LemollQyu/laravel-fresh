<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // relasi dari barang yang dimiliki oleh user, 1 user dapat punya banyak barang
    public function barangs() {
        return $this->hasMany(\App\Models\Barang::class);
    }

    // relasi dengan table profile oneToOne
    public function profiles() {
        // relasi ke model mana, dan field relasinya apa
        return $this->hasOne(\App\Models\Profile::class, 'user_id');
    }

    // model user ini akan berelasi ono to many, satu user dapat punya product banyak
    public function products() {
        return $this->hasMany(\App\Models\Product::class, 'user_id');
    }

    // accesor cara buat getNamaFieldAttribute
    // unutk format biasanya
    //  dan ini untuk dipanggil

    public function getNameWithPanggilanAttribute() {
        return 'Bpk/Ibu ' . $this->name;
    }

    // mutator cara buat setNameFieldAttribute
    // unutuk format biasanya
    //  dan ini unutk di simpan, ketika di save datanya di format biasanya digunaka seperti itu

    public function setNameAttribute($value) {
        $this->attributes['name'] = ucwords($value);
    }

    public function setEmailAttribute($value) {
        $this->attributes['email'] = $value . '@gmail.com';
    }

    // Local Scope
    // berguna ntuk mempersingkat / mempercepat query, jadi query yang di local scope ini dapat digunakan terus menerus, nggak ulang query itu
    // dan coding dapat rapi
    public function scopeActive($query) {
        return $this->where('is_active', 1);
    }
}
