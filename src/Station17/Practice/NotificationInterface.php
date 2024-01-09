<?php declare(strict_types=1);

namespace Src\Station17\Practice;

interface NotificationInterface
{
    public function setMessage(string $header, string $message): void;

    public function sendMessage(): void;
}
