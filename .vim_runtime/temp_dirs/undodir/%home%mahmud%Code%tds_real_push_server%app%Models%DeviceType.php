Vim�UnDo� ,�+<6+�3o�pLEr��tk�9�!�^��k      &    public function subscribedUsers(){                             W�x�    _�                            ����                                                                                                                                                                                                                                                                                                                                                             WϸR     �         
      namespace App;5�_�                           ����                                                                                                                                                                                                                                                                                                                                                             WϸV    �         
      namespace App\models;5�_�                    	        ����                                                                                                                                                                                                                                                                                                                                                             Wϸc     �   	      
    �   	   
   
    5�_�                    	       ����                                                                                                                                                                                                                                                                                                                                                             Wϸd    �      	              //5�_�                    	       ����                                                                                                                                                                                                                                                                                                                                                             Wϸ|     �   	      
    �   	   
   
    5�_�                       %    ����                                                                                                                                                                                                                                                                                                                                                             Wϸ�     �   
            H        return MessageStatus::where('status_name', '=', $name)->first();5�_�                           ����                                                                                                                                                                                                                                                                                                                                                             Wϸ�    �   
            =        return MessageStatus::where('', '=', $name)->first();5�_�      	                 "    ����                                                                                                                                                                                                                                                                                                                                                             Wϸ�    �   
            :        return DeviceType::where('', '=', $name)->first();5�_�      
           	          ����                                                                                                                                                                                                                                                                                                                                                             W�ü     �                   �             5�_�   	              
      &    ����                                                                                                                                                                                                                                                                                                                                                             W���     �               '    public function subscribedUsers(){}5�_�   
                        ����                                                                                                                                                                                                                                                                                                                                                             W���    �                   5�_�                            ����                                                                                                                                                                                                                                                                                                                                                V       W�S�    �                &    public function subscribedUsers(){   ;        return $this->hasMany('App\Models\SubscribedUser');       }5�_�                            ����                                                                                                                                                                                                                                                                                                                                                V       W�V#    �                   �             5�_�                            ����                                                                                                                                                                                                                                                                                                                                                  V        W�^e     �             �             5�_�                           ����                                                                                                                                                                                                                                                                                                                                                  V        W�^h     �               &    public function subscribedUsers(){5�_�                       0    ����                                                                                                                                                                                                                                                                                                                                                  V        W�^m    �               Y        return $this->belongsToMany('App\Models\SubscribedUsers', 'subscribed_users_id');5�_�                           ����                                                                                                                                                                                                                                                                                                                                                  V        W�^�     �               Y        return $this->belongsToMany('App\Models\SubscribedUsers', 'subscribed_users_id');5�_�                           ����                                                                                                                                                                                                                                                                                                                                                  V        W�^�   	 �               R        return $this->belongsToMany('App\Models\Messages', 'subscribed_users_id');5�_�                       8    ����                                                                                                                                                                                                                                                                                                                                                  V        W�^�   
 �               S        return $this->hasMany('App\Models\SubscribedUsers', 'subscribed_users_id');5�_�                       <    ����                                                                                                                                                                                                                                                                                                                                                  V        W�_"     �               R        return $this->hasMany('App\Models\SubscribedUser', 'subscribed_users_id');5�_�                       6    ����                                                                                                                                                                                                                                                                                                                                                  V        W�_)    �               L        return $this->hasMany('App\Models\Messages', 'subscribed_users_id');5�_�                       1    ����                                                                                                                                                                                                                                                                                                                                                  V        W�_`    �               H        return $this->hasMany('App\Models\Messages', 'device_types_id');5�_�                            ����                                                                                                                                                                                                                                                                                                                                                v       W�x�    �               &    public function subscribedUsers(){5��