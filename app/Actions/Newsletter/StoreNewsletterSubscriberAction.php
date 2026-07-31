<?php

namespace App\Actions\Newsletter;

use App\Models\NewsletterSubscriber;

class StoreNewsletterSubscriberAction
{
    /**
     * @return array{subscriber: NewsletterSubscriber, created: bool}
     */
    public function handle(array $data): array
    {
        $subscriber = NewsletterSubscriber::query()->firstOrCreate([
            'email' => $data['email'],
        ]);

        return [
            'subscriber' => $subscriber,
            'created' => $subscriber->wasRecentlyCreated,
        ];
    }
}
