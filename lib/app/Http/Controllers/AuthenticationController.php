<?php

/**
 * SigniFlow OpenAPI Spec v1
 * ## SigniFlow API used to automate esignature workflow creation and management.
 * PHP version 7.2.5
 *
 * The version of the OpenAPI document: 1.0
 * Contact: support@signiflow.com
 *
 * NOTE: This class is auto generated by OpenAPI-Generator
 * https://openapi-generator.tech
 * Do not edit the class manually.
 *
 * Source files are located at:
 *
 * > https://github.com/OpenAPITools/openapi-generator/blob/master/modules/openapi-generator/src/main/resources/php-laravel/
 */


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class AuthenticationController extends Controller
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * Operation login
     *
     * Login.
     *
     *
     * @return Http response
     */
    public function login()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['contentType'])) {
            throw new \InvalidArgumentException('Missing the required parameter $contentType when calling login');
        }
        $contentType = $input['contentType'];

        if (!isset($input['loginRequest'])) {
            throw new \InvalidArgumentException('Missing the required parameter $loginRequest when calling login');
        }
        $loginRequest = $input['loginRequest'];


        return response('How about implementing login as a post method ?');
    }
    /**
     * Operation postLogout
     *
     * Logout.
     *
     *
     * @return Http response
     */
    public function postLogout()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['contentType'])) {
            throw new \InvalidArgumentException('Missing the required parameter $contentType when calling postLogout');
        }
        $contentType = $input['contentType'];

        $logoutRequest = $input['logoutRequest'];


        return response('How about implementing postLogout as a post method ?');
    }
    /**
     * Operation postTokenExtend
     *
     * Token Extend.
     *
     *
     * @return Http response
     */
    public function postTokenExtend()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['contentType'])) {
            throw new \InvalidArgumentException('Missing the required parameter $contentType when calling postTokenExtend');
        }
        $contentType = $input['contentType'];

        $tokenExtendRequest = $input['tokenExtendRequest'];


        return response('How about implementing postTokenExtend as a post method ?');
    }
    /**
     * Operation postTokenValidate
     *
     * Token Validate.
     *
     *
     * @return Http response
     */
    public function postTokenValidate()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['contentType'])) {
            throw new \InvalidArgumentException('Missing the required parameter $contentType when calling postTokenValidate');
        }
        $contentType = $input['contentType'];

        $tokenValidateRequest = $input['tokenValidateRequest'];


        return response('How about implementing postTokenValidate as a post method ?');
    }
}
