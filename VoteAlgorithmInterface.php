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
 * Interface VoteAlgorithmInterface
 * @package P2\Voting
 */
interface VoteAlgorithmInterface 
{
    /**
     * Returns the calculated vote value for the given vote.
     *
     * @param VoteInterface $vote
     *
     * @return float
     */
    public function calculateValue(VoteInterface $vote);
}
