<?php

namespace Laravel\Passport\Bridge;
use Illuminate\Database\Eloquent\Model;
use Hyn\Tenancy\Traits\UsesTenantConnection;

class PassportRefreshToken extends Model
{
    use UsesTenantConnection;
    
    protected $table = 'oauth_refresh_tokens';
    
    protected $fillable = ['id', 'access_token_id', 'revoked', 'expires_at'];
    
    public $timestamps = false;
}
