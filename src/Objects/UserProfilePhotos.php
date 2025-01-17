<?php

namespace Telegram\Bot\Objects;

/**
 * Class UserProfilePhotos.
 *
 * @link https://core.telegram.org/bots/api#userprofilephotos
 *
 * @property int         $total_count  Total number of profile pictures the target user has.
 * @property PhotoSize[] $photos       Array of Array of PhotoSize. Requested profile pictures (in up to 4 sizes each).
 */
class UserProfilePhotos extends AbstractResponseObject
{
    public function relations(): array
    {
        return [
            'photos' => PhotoSize::class,
        ];
    }
}
