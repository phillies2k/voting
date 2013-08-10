<?php
/**
 * This file is part of the Tracks project.
 *
 * (c) 2013 Philipp Boes <mostgreedy@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace P2\Voting;

/**
 * Interface VoteInterface
 * @package P2\Voting
 */
interface VoteInterface
{
    /**
     * @var string
     */
    const VOTE_DOWN = 3;

    /**
     * @var string
     */
    const VOTE_UP = 5;

    /**
     * @return VoterInterface
     */
    public function getVoter();

    /**
     * @return VoteableInterface
     */
    public function getVoteable();

    /**
     * @return string
     */
    public function getType();

    /**
     * @return float
     */
    public function getValue();
}
