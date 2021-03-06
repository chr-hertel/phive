<?php
namespace PharIo\Phive;

class Sha1Hash extends BaseHash {

    /**
     * @param string $content
     *
     * @return Hash
     */
    public static function forContent($content) {
        return new static(hash('sha1', $content));
    }

    /**
     * @param string $hash
     *
     * @throws InvalidHashException
     */
    protected function ensureValidHash($hash) {
        if (!preg_match('/^[0-9a-f]{40}$/i', $hash)) {
            throw new InvalidHashException(sprintf('%s is not a valid SHA-1 hash', $hash));
        }
    }

}
