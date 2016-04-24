<?php

namespace Eschmar\SlugifyBundle\Twig;

use Eschmar\SlugifyBundle\Util\Slug;

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
     * @author Marcel Eschmann, @eschmar
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
     * @author Marcel Eschmann, @eschmar
     **/
    public function slugifyFilter($input)
    {
        return Slug::ify($input, "-");
    }
}