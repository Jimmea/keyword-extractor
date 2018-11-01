<?php

namespace KeywordExtractor\Modifiers\Filters;

class IndexBlacklistFilter extends AbstractFilter
{
    private $indexBlacklist;

    public function __construct(array $indexBlacklist)
    {
        $this->setIndexBlacklist($indexBlacklist);
    }

    public function modifyToken($token)
    {
        return $token;
    }

    public function modifyTokens(array $array)
    {
        foreach ($this->getIndexBlacklist() as $index) {
            unset($array[$index]);
        }

        return $array;
    }

    /**
     * @return array
     */
    public function getIndexBlacklist(): array
    {
        return $this->indexBlacklist;
    }

    /**
     * @param array $indexBlacklist
     */
    public function setIndexBlacklist(array $indexBlacklist): void
    {
        $this->indexBlacklist = $indexBlacklist;
    }
}
