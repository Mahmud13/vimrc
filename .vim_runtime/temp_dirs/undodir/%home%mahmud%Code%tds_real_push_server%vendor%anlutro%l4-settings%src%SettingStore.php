Vim�UnDo� ���b��E&۶��X�O<��N�s����y�B�   �                                 W��    _�                    1        ����                                                                                                                                                                                                                                                                                                                            #           0           V       W��     �   1   2   �    �   1   2   �      	/**   .	 * Get a specific key from the settings data.   	 *   	 * @param  string|array $key   9	 * @param  mixed        $default Optional default value.   	 *   	 * @return mixed   	 */   +	public function get($key, $default = null)   	{   		$this->checkLoaded();       5		return ArrayUtil::get($this->data, $key, $default);   	}5�_�                    :       ����                                                                                                                                                                                                                                                                                                                            #           0           V       W��   	 �   9   ;   �      0	public function getValue($key, $default = null)5�_�                    >       ����                                                                                                                                                                                                                                                                                                                            #           0           V       W��3   
 �   =   ?   �      6		$data = ArrayUtil::get($this->data, $key, $default);5�_�                     >       ����                                                                                                                                                                                                                                                                                                                            #           0           V       W��A    �   >   ?   �              �   >   @   �                  return $data['value'];5�_�                    .        ����                                                                                                                                                                                                                                                                                                                                                             W���    �   -   /   �              $data = $this->data;           $data = $data['value'];5�_�                     0       ����                                                                                                                                                                                                                                                                                                                                                             W���    �   /   1   �      /		return ArrayUtil::get($data, $key, $default);5��