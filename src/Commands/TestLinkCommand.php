<?php

namespace Markevans\OnesaasLaravelSdk\Commands;
use Illuminate\Console\Command;
use Firebase\JWT\JWT;

class TestLinkCommand extends Command
{
    protected $signature = 'onesaas:test-link {email}';
    protected $description = 'Generate a local OneSaas SSO test link';

    public function handle(): void
    {
        $email = $this->argument('email');
        $payload = [
            'email' => $email,
            'name'  => 'Test User',
            'user_id' => rand(1000, 9999),
            'timestamp' => time(),
        ];

        // Generate JWT or HMAC signature here if needed
        $token = base64_encode(json_encode($payload));

        $url = route('onesaas.login', ['token' => $token]);

        $this->info("Test SSO URL: $url");
    }
}