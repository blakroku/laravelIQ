<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Social()
 * @method static static Tutorial()
 * @method static static Video()
 * @method static static Article()
 * @method static static News()
 */
final class PostCategory extends Enum
{
    const Social = 'social';
    const Tutorial = 'tutorial';
    const Video = 'video';
    const Article = 'article';
    const News = 'news';
}
