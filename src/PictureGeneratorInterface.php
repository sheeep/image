<?php

/*
 * This file is part of Contao.
 *
 * Copyright (c) 2005-2018 Leo Feyer
 *
 * @license LGPL-3.0+
 */

namespace Contao\Image;

interface PictureGeneratorInterface
{
    /**
     * Generates a Picture object.
     *
     * @param ImageInterface                $image
     * @param PictureConfigurationInterface $config
     * @param ResizeOptionsInterface        $options
     *
     * @return PictureInterface
     */
    public function generate(ImageInterface $image, PictureConfigurationInterface $config, ResizeOptionsInterface $options);
}
