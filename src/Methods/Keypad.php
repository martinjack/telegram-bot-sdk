<?php

namespace Telegram\Bot\Methods;

use Telegram\Bot\Keyboard\Keyboard;

trait Keypad
{

    /**
     * Builds a custom keyboard markup.
     *
     * <code>
     * $params = [
     *   'keyboard'          => '',
     *   'resize_keyboard'   => '',
     *   'one_time_keyboard' => '',
     *   'selective'         => '',
     * ];
     * </code>
     *
     * @deprecated Use Telegram\Bot\Keyboard\Keyboard::make(array $params = []) instead.
     *             To be removed in next major version.
     *
     * @link       https://core.telegram.org/bots/api#replykeyboardmarkup
     *
     * @param array $params
     *
     * @var array   $params ['keyboard']
     * @var bool    $params ['resize_keyboard']
     * @var bool    $params ['one_time_keyboard']
     * @var bool    $params ['selective']
     *
     * @return string
     */
    public function replyKeyboardMarkup(array $params)
    {
        return Keyboard::make($params);
    }
    /**
     * Hide the current custom keyboard and display the default letter-keyboard.
     *
     * <code>
     * $params = [
     *   'hide_keyboard' => true,
     *   'selective'     => false,
     * ];
     * </code>
     *
     * @deprecated Use Telegram\Bot\Keyboard\Keyboard::hide(array $params = []) instead.
     *             To be removed in next major version.
     *
     * @link       https://core.telegram.org/bots/api#replykeyboardhide
     *
     * @param array $params
     *
     * @var bool    $params ['hide_keyboard']
     * @var bool    $params ['selective']
     *
     * @return string
     */
    public static function replyKeyboardHide(array $params = [])
    {
        return Keyboard::hide($params);
    }

}
