<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Configuration;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;
use AmazonPHP\SellingPartner\HttpFactory;
use AmazonPHP\SellingPartner\HttpSignatureHeaders;
use AmazonPHP\SellingPartner\ObjectSerializer;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Log\LoggerInterface;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 */
final class AuthorizationSDK
{
    public const API_NAME = 'Authorization';

    public const OPERATION_GETAUTHORIZATIONCODE = 'getAuthorizationCode';

    public const OPERATION_GETAUTHORIZATIONCODE_PATH = '/authorization/v1/authorizationCode';

    private ClientInterface $client;

    private HttpFactory $httpFactory;

    private Configuration $configuration;

    private LoggerInterface $logger;

    public function __construct(ClientInterface $client, HttpFactory $requestFactory, Configuration $configuration, LoggerInterface $logger)
    {
        $this->client = $client;
        $this->httpFactory = $requestFactory;
        $this->configuration = $configuration;
        $this->logger = $logger;
    }

    /**
     * Operation getAuthorizationCode.
     *
     * Returns the Login with Amazon (LWA) authorization code for an existing Amazon MWS authorization.
     *
     * @param string $selling_partner_id The seller ID of the seller for whom you are requesting Selling Partner API authorization. This must be the seller ID of the seller who authorized your application on the Marketplace Appstore. (required)
     * @param string $developer_id Your developer ID. This must be one of the developer ID values that you provided when you registered your application in Developer Central. (required)
     * @param string $mws_auth_token The MWS Auth Token that was generated when the seller authorized your application on the Marketplace Appstore. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function getAuthorizationCode(AccessToken $accessToken, string $region, string $selling_partner_id, string $developer_id, string $mws_auth_token) : \AmazonPHP\SellingPartner\Model\Authorization\GetAuthorizationCodeResponse
    {
        $request = $this->getAuthorizationCodeRequest($accessToken, $region, $selling_partner_id, $developer_id, $mws_auth_token);

        $this->configuration->extensions()->preRequest('Authorization', 'getAuthorizationCode', $request);

        try {
            $correlationId = \uuid_create(UUID_TYPE_RANDOM);

            if ($this->configuration->loggingEnabled('Authorization', 'getAuthorizationCode')) {
                $sanitizedRequest = $request;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedRequest = $request->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('Authorization', 'getAuthorizationCode'),
                    'Amazon Selling Partner API pre request',
                    [
                        'api' => 'Authorization',
                        'operation' => 'getAuthorizationCode',
                        'request_correlation_id' => $correlationId,
                        'request_body' => (string) $sanitizedRequest->getBody(),
                        'request_headers' => $sanitizedRequest->getHeaders(),
                        'request_uri' => (string) $sanitizedRequest->getUri(),
                    ]
                );
            }

            $response = $this->client->sendRequest($request);

            $this->configuration->extensions()->postRequest('Authorization', 'getAuthorizationCode', $request, $response);

            if ($this->configuration->loggingEnabled('Authorization', 'getAuthorizationCode')) {
                $sanitizedResponse = $response;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedResponse = $response->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('Authorization', 'getAuthorizationCode'),
                    'Amazon Selling Partner API post request',
                    [
                        'api' => 'Authorization',
                        'operation' => 'getAuthorizationCode',
                        'response_correlation_id' => $correlationId,
                        'response_body' => (string) $sanitizedResponse->getBody(),
                        'response_headers' => $sanitizedResponse->getHeaders(),
                        'response_status_code' => $sanitizedResponse->getStatusCode(),
                    ]
                );
            }
        } catch (ClientExceptionInterface $e) {
            throw new ApiException(
                "[{$e->getCode()}] {$e->getMessage()}",
                (int) $e->getCode(),
                null,
                null,
                $e
            );
        }

        $statusCode = $response->getStatusCode();

        if ($statusCode < 200 || $statusCode > 299) {
            throw new ApiException(
                \sprintf(
                    '[%d] Error connecting to the API (%s)',
                    $statusCode,
                    (string) $request->getUri()
                ),
                $statusCode,
                $response->getHeaders(),
                (string) $response->getBody()
            );
        }

        return ObjectSerializer::deserialize(
            $this->configuration,
            (string) $response->getBody(),
            \AmazonPHP\SellingPartner\Model\Authorization\GetAuthorizationCodeResponse::class,
            []
        );
    }

    /**
     * Create request for operation 'getAuthorizationCode'.
     *
     * @param string $selling_partner_id The seller ID of the seller for whom you are requesting Selling Partner API authorization. This must be the seller ID of the seller who authorized your application on the Marketplace Appstore. (required)
     * @param string $developer_id Your developer ID. This must be one of the developer ID values that you provided when you registered your application in Developer Central. (required)
     * @param string $mws_auth_token The MWS Auth Token that was generated when the seller authorized your application on the Marketplace Appstore. (required)
     *
     * @throws InvalidArgumentException
     *
     * @return RequestInterface
     */
    public function getAuthorizationCodeRequest(AccessToken $accessToken, string $region, string $selling_partner_id, string $developer_id, string $mws_auth_token) : RequestInterface
    {
        // verify the required parameter 'selling_partner_id' is set
        if ($selling_partner_id === null || (\is_array($selling_partner_id) && \count($selling_partner_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $selling_partner_id when calling getAuthorizationCode'
            );
        }
        // verify the required parameter 'developer_id' is set
        if ($developer_id === null || (\is_array($developer_id) && \count($developer_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $developer_id when calling getAuthorizationCode'
            );
        }
        // verify the required parameter 'mws_auth_token' is set
        if ($mws_auth_token === null || (\is_array($mws_auth_token) && \count($mws_auth_token) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $mws_auth_token when calling getAuthorizationCode'
            );
        }

        $resourcePath = '/authorization/v1/authorizationCode';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
        $query = '';

        // query params
        if (\is_array($selling_partner_id)) {
            $selling_partner_id = ObjectSerializer::serializeCollection($selling_partner_id, '', true);
        }

        if ($selling_partner_id !== null) {
            $queryParams['sellingPartnerId'] = $selling_partner_id;
        }
        // query params
        if (\is_array($developer_id)) {
            $developer_id = ObjectSerializer::serializeCollection($developer_id, '', true);
        }

        if ($developer_id !== null) {
            $queryParams['developerId'] = $developer_id;
        }
        // query params
        if (\is_array($mws_auth_token)) {
            $mws_auth_token = ObjectSerializer::serializeCollection($mws_auth_token, '', true);
        }

        if ($mws_auth_token !== null) {
            $queryParams['mwsAuthToken'] = $mws_auth_token;
        }

        if (\count($queryParams)) {
            $query = \http_build_query($queryParams);
        }

        if ($multipart) {
            $headers = [
                'accept' => ['application/json'],
                'host' => [$this->configuration->apiHost($region)],
                'user-agent' => [$this->configuration->userAgent()],
            ];
        } else {
            $headers = [
                'content-type' => ['application/json'],
                'accept' => ['application/json'],
                'host' => [$this->configuration->apiHost($region)],
                'user-agent' => [$this->configuration->userAgent()],
            ];
        }

        $request = $this->httpFactory->createRequest(
            'GET',
            $this->configuration->apiURL($region) . $resourcePath . '?' . $query
        );

        // for model (json/xml)
        if (\count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];

                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = \is_array($formParamValue) ? $formParamValue : [$formParamValue];

                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem,
                        ];
                    }
                }
                $request = $request->withParsedBody($multipartContents);
            } elseif ($headers['content-type'] === ['application/json']) {
                $request = $request->withBody($this->httpFactory->createStreamFromString(\json_encode($formParams, JSON_THROW_ON_ERROR)));
            } else {
                $request = $request->withParsedBody($formParams);
            }
        }

        foreach (\array_merge($headerParams, $headers) as $name => $header) {
            $request = $request->withHeader($name, $header);
        }

        return HttpSignatureHeaders::forIAMUser(
            $this->configuration,
            $accessToken,
            $region,
            $request
        );
    }
}
