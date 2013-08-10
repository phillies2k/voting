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
     * Returns the voter for this vote.
     *
     * @return VoterInterface
     */
    public function getVoter();

    /**
     * Returns the voteable for this vote.
     *
     * @return VoteableInterface
     */
    public function getVoteable();

    /**
     * Returns the value of this vote.
     *
     * @return float
     */
    public function getValue();
}
