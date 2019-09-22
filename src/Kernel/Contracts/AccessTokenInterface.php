<?php
/**
 * # ----
 * #     Yprisoner <yyprisoner@gmail.com>
 * #                   2019/9/22 22:09
 * #                            ------
 **/


namespace YsOpen\Kernel\Contracts;

/**
 * Interface AccessTokenInterface
 * @package YsOpen\Kernel\Contracts
 */
interface AccessTokenInterface {

    /**
     * @return array
     */
    public function getToken(): array ;

    /**
     * @return AccessTokenInterface
     */
    public function refresh(): self ;

}