<?php
/**
 * This file is part of the Tracks project.
 *
 * (c) 2013 Philipp Boes <mostgreedy@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace P2\Voting\Algorithm;

use P2\Voting\VoteAlgorithmInterface;
use P2\Voting\VoteInterface;

/**
 * Class UpVoteAlgorithm
 * @package P2\Voting\Algorithm
 */
class UpVoteAlgorithm implements VoteAlgorithmInterface
{
    public function calculateValue(VoteInterface $vote)
    {
        return abs($vote->getValue());
    }
}
