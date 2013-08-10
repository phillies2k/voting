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
 * Interface VoteableInterface
 * @package P2\Voting
 */
interface VoteableInterface
{
    /**
     * @return VoteAlgorithmInterface[]
     */
    public static function getVoteAlgorithms();

    /**
     * Returns whether or not the given voter has already voted on that voteable or not.
     *
     * @param VoterInterface $voter The voter to check.
     *
     * @return boolean True when the voter already voted on that voteable, false otherwise.
     */
    public function hasVoted(VoterInterface $voter);
}
