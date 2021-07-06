<?php


namespace ApiClient\Api\ControlPanel\Request;


use ApiClient\ApiResource;
use ApiClient\Auth;
use ApiClient\Request;
use ApiClient\RequestBuilder;

/**
 * Class PrivateAuth
 * @package ApiClient\Api\ControlPanel\Request
 */
class PrivateAuth extends Auth
{
    /**
     * @param RequestBuilder $requestBuilder
     */
    public static function doAuth(RequestBuilder $requestBuilder): void
    {
        $requestBuilder
            ->setDomain("https://cp.crpt.trading")
            ->addHeader(
                "Authorization",
                "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpYXQiOjE2MjU1NzM5NzIsImV4cCI6MTYyNTU3NzU3Miwicm9sZXMiOlsiUk9MRV9BRE1JTiJdLCJ1c2VybmFtZSI6InJza3J5ZGdlQGl0bGFiLXN0dWRpby5jb20iLCJpZCI6ImQyN2UxYjdiLWVmYzAtNGI3My1hNmU3LTczMzJlOTE1NGNlOCJ9.Q-dehWJeL34Vuk4P6nWh3C2-wZA93UKiojOqSDzgiIuQTdL2XKKMtUN84jbxf15k4nYLtP0h5p1rIMWW74RMnTSDutGov6ICvnb_SDbrs1YO1L-X03EIsRLZnzKfTN3XFDkZuJpP326uMWenBMd62ZPI8WQl1iKyE8bysFBbvmYNTRmnjRW1f9kjmG_W6dqdAxpkBrve-Wwzb6WUhFU14fKWceN538GvxHs8jU1tCMge34_fASsjGdSmtvOiv5rw_Lt6vHy7hJUFE5zdhOvsOW9MU7NqD4V5Ssio5nmB17bthye9jAf5wd61devGJD_YpikAJdUKhatBG04Bhdfa3cx5IiCGkAJDUcRKsL_ZN8HvuL3eRpJfrO1nk__VRLQeEuhVTf7sVkyL1-IStFqY3pFUcIJTrYpfMgJLkSoMiXlolFu8Zycas-A85h6hcXIfcfkwh6dj2R6ICKmbo1MSiAwZ3fkpRS8nlFCIMKiHqID1eSEkJmkYKmP9pF50AEOFYvLXmkshnuqm-d1gfBrN2PB5L58buke5USojTH8nXp1I3VzmgnpRIAbibVE-u5HpJ3VZySF7X4RVb5sDHZO-y51hBasLAgYtdPzQUqwF86uvBMvGd2G3u_vPYC2RsCXXzrGaquBp5WHlF2noLC44BtRv4O6xldFd8FJgcsS7i8c"
            );
    }
}
