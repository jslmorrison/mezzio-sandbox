<?php

declare(strict_types=1);

namespace Api\Handler;

use Laminas\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

final class UsersHandler implements RequestHandlerInterface
{
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        return new JsonResponse(
            [
                [
                    'id' => 1,
                    'name' => 'Maw',
                    'email' => 'maw@example.com',
                    'activated' => true,
                    'date_registered' => (new \DateTimeImmutable('yesterday'))->setTime(8, 30),
                ],
                [
                    'id' => 2,
                    'name' => 'Paw',
                    'email' => 'paw@example.com',
                    'activated' => true,
                    'date_registered' => (new \DateTimeImmutable('yesterday'))->setTime(8, 32),
                ],
                [
                    'id' => 3,
                    'name' => 'John Boy',
                    'email' => 'john.boy@example.com',
                    'activated' => false,
                    'date_registered' => (new \DateTimeImmutable('yesterday'))->setTime(9, 0),
                ],
                [
                    'id' => 4,
                    'name' => 'Jim Bob',
                    'email' => 'jim.bob@example.com',
                    'activated' => false,
                    'date_registered' => (new \DateTimeImmutable('yesterday'))->setTime(9, 15),
                ]
            ]
        );
    }
}
