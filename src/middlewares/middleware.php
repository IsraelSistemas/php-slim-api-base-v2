<?php 

	class DecodeToken {	
		
		public function __construct() {

		}

		public function __invoke($request, $response, $next) {
			if ($request->hasHeader("Authorization")) {
				// Validar si el token sigue siendo valido
				$headers = $request->getHeaders();
				$token = $headers['HTTP_AUTHORIZATION'];

				if (!$token || !$token[0] || $token[0] == '') {
					return $response->withStatus(401);		
				}

				$claims = Helpers::decodeAccessToken($token[0]);
				$request = $request->withAttribute('claims', $claims);

				return $next($request, $response, $claims);
			}

			return $response->withStatus(401);
		}
	}

	class DecodeTokenWithExpiration extends Helpers {
	
		public function __construct() {
        }
     
        public function __invoke($request, $response, $next) {		
			$claims = $this->allowAccess();

			if ($claims["Code"] == 200) {
				$request = $request->withAttribute('claims', $claims);
			
				return $next($request, $response, $claims);
			}

			return $response->withStatus(401);
        }
    }