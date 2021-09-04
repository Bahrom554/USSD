<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public const TYPE_INTERNET = 'internet';
    public const TYPE_MINUTE = 'minute';
    public const TYPE_SMS = 'sms';
    public const TYPE_TARIFF = 'tariff';

    public const UCELL = 'ucell';
    public const BEELINE = 'beeline';
    public const UZMOBILE = 'uzmobile';
    public const MOBIUZ = 'mobiuz';

    public static function companiesList(): array
    {
        return [
            self::UCELL => 'Ucell',
            self::BEELINE => 'Beeline',
            self::UZMOBILE => 'Uzmobile',
            self::MOBIUZ => 'Mobiuz'
        ];
    }
    public static function typesList(): array
    {
        return [
            self::TYPE_INTERNET => 'Internet',
            self::TYPE_SMS => 'Sms',
            self::TYPE_MINUTE => 'Minute',
            self::TYPE_TARIFF => 'Tariff'
        ];
    }


    protected $fillable=[
        'name','type'
    ];

}
