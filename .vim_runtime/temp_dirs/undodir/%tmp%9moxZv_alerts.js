Vim�UnDo� �(i�G}ۻo������fOب�
 ���l~  
                                   XDHk    _�                     �        ����                                                                                                                                                                                                                                                                                                                                                             XDH2     �   �   �  C    �   �   �  C    5�_�                    �       ����                                                                                                                                                                                                                                                                                                                                                             XDHH    �   �   �          ,                // console.log('have perm');5�_�                     �        ����                                                                                                                                                                                                                                                                                                                            �          
          V       XDHj    �   �   �       :       (function getEndPoint(pushSubscription) {   *    if (pushSubscription.subscriptionId) {   /        return pushSubscription.subscriptionId;       }   >    var endpoint = 'https://android.googleapis.com/gcm/send/';   :    var parts = pushSubscription.endpoint.split(endpoint);       if (parts.length > 1)       {           return {                'browser': 'chrome',               'id': parts[1]   
        };       }   A    endpoint = 'https://updates.push.services.mozilla.com/push/';   6    parts = pushSubscription.endpoint.split(endpoint);       if (parts.length > 1)       {           return {   !            'browser': 'firefox',               'id': parts[1]   
        };       }          B    endpoint = 'https://updates.push.services.mozilla.com/wpush/';   6    parts = pushSubscription.endpoint.split(endpoint);       if (parts.length > 1)       {           return {   !            'browser': 'firefox',               'id': parts[1]   
        };       }       return '';   }       7function subscribeNow(registrationDetail, unregister) {       if (!registrationDetail) {           return;       }   (    /*console.log(registrationDetail);*/   @    var ep = 'https://ipush.apps.ndtv.com/subscribeBrowser.php';   X    //var ep = 'http://localhost/ndtvapps/pushnotification/public/subscribeBrowser.php';           $.ajax({           type: 'POST',           dataType: 'json',           url: ep,           data: {   @            'packageName': 'ndtv.' + registrationDetail.browser,                'env': 'PRODUCTION',   !            'sections': sections,   %            'unregister': unregister,   4            'registration_id': registrationDetail.id   
        },   $        complete: function (data) {}       });   }5��