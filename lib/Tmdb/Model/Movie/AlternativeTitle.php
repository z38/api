<?php
/**
 * This file is part of the Tmdb PHP API created by Michael Roterman.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package Tmdb
 * @author Michael Roterman <michael@wtfz.net>
 * @copyright (c) 2013, Michael Roterman
 * @version 0.0.1
 */
namespace Tmdb\Model\Movie;

use Tmdb\Model\AbstractModel;

class AlternativeTitle extends AbstractModel {

    private $iso31661;
    private $title;

    public static $_properties = array(
        'iso_3166_1',
        'title',
    );

    /**
     * @param mixed $iso31661
     * @return $this
     */
    public function setIso31661($iso31661)
    {
        $this->iso31661 = $iso31661;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIso31661()
    {
        return $this->iso31661;
    }

    /**
     * @param mixed $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }


}