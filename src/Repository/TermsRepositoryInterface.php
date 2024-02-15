<?php

declare(strict_types=1);

namespace Setono\SyliusTermsPlugin\Repository;

use Doctrine\ORM\QueryBuilder;
use Setono\SyliusTermsPlugin\Model\TermsInterface;
use Sylius\Component\Channel\Model\ChannelInterface;
use Sylius\Component\Resource\Repository\RepositoryInterface;

interface TermsRepositoryInterface extends RepositoryInterface
{
    public function createListQueryBuilder(): QueryBuilder;

    /**
     * @return array<array-key, TermsInterface>
     */
    public function findByChannel(ChannelInterface $channel): array;

    public function findOneByChannelAndSlug(ChannelInterface $channel, string $slug): ?TermsInterface;
}
