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

use P2\Voting\Exception\AlreadyVotedException;

/**
 * Interface VoterInterface
 * @package P2\Voting
 */
interface VoterInterface
{
    /**
     * Returns the vote casted for the given voteable.
     *
     * @param VoteableInterface $voteable
     * @return VoteInterface The vote
     * @throws AlreadyVotedException When this voter has already voted on the given voteable.
     */
    public function castVote(VoteableInterface $voteable);

    /**
     * Returns the votes of this voter.
     *
     * @return VoteInterface
     */
    public function getVotes();

    /**
     * Returns an unique identifier for this voter
     *
     * @return string
     */
    public function __toString();
}
