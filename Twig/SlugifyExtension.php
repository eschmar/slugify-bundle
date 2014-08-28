<?php

namespace Eschmar\TestBundle\Twig;

use Eschmar\TestBundle\Helper\Slugifier;

class SlugifyExtension extends \Twig_Extension
{
    public function getName()
    {
        return 'slugify_extension';
    }

    /**
     * Returned filters extend twig and can be called in twig context
     *
     * @return array
     * @author Marcel Eschmann
     **/
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('slugify', array($this, 'slugifyFilter')),
        );
    }

    /**
     * Slugify strings
     *
     * @return string
     * @author Marcel Eschmann
     **/
    public function slugifyFilter($input)
    {
        return Slugifier::slugify($input, "-");
    }
}