<?php

declare(strict_types=1);

namespace Secretspec;

/**
 * Value-free resolution outcome for one declared secret: how it would resolve
 * and from where, never the value itself.
 */
final class SecretReport
{
    /**
     * @param string      $status         one of "resolved", "missing_required", "missing_optional"
     * @param string|null $sourceProvider credential-free URI of the provider that answered, if any
     */
    public function __construct(
        public readonly string $name,
        public readonly string $status,
        public readonly bool $required,
        public readonly ?string $sourceProvider,
        /** Provider can issue the value without report-time materialization (0.18+). */
        public readonly bool $issuable,
        public readonly bool $defaultApplied,
        public readonly bool $generated,
        public readonly bool $asPath,
    ) {
    }
}
