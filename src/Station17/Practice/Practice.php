<?php declare(strict_types=1);

namespace Src\Station17\Practice;

require_once('vendor/autoload.php');

class Practice
{
    public function main(): void
    {
        $lineNotifier = new LineNotification();
        $this->sendNotification($lineNotifier);
    }

    public function sendNotification(NotificationInterface $notification): void
    {
        $notification->setMessage('新年のご挨拶', 'あけましておめでとうございます');
        $notification->sendMessage();
    }
}

(new Practice)->main();
