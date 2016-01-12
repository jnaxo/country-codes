<?php

namespace Jnaxo\Store\ApiManager;

class ApiManager
{

    /**
     * Create a json Response including errors and no data
     * @param  array  $errors the errors
     * @return responce        The responce including error data
     */
    private function jsonError(array $error)
    {
        return $response = response()->json(array(
            'code' => $error['error'],
            'status' => 'not found',
            'message' => $error["exception"],
            'error' => null,
            'data' => null
        ));
    }
    
    /**
     * Create a json Response, including data and errors
     * @param  array  $data   The data
     * @param  array  $errors The errors
     * @return Responce	The responce containing json encoded data
     */
    private function jsonReply(array $data)
    {      
        return $response = response()->json(array(
            'code' => 200,
            'status' => 'success',
            'message' => null,
            'error' => null,
            'data' => $data
        ));
    }
    
    /**
     * Execute the passed function then return the result (or exceptions) as json
     * @param  Closure $f The function to execute
     * @return string     data as json encoded string
     */
    public function apiOutput(Closure $f)
    {
        try
        {
            $return = (array) $f();

            if (count($return) == 0)
            {
                $return['exception'] = "E: Resource is empty";
                return $this->jsonError($return);
            } elseif (isset($return["error"]) and $return["error"] == 404)
            {
                $return['exception'] = "E: Resource not exist";
                return $this->jsonError($return);
            }
            
            /* Success */
            return $this->jsonReply($return);
            
        } catch (AppException $e)
        {
            $return['exception'] = $e->getMessage();

            return $this->jsonError($return);
        } catch (Exception $e)
        {
            $return['exception'] = $e->getMessage();

            Log::error($e->__toString());
            return $this->jsonError($return);
        }
    }

}
