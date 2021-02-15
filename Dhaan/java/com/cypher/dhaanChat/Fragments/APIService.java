package com.koddev.dhaanChat.Fragments;

import com.koddev.dhaanChat.Notifications.MyResponse;
import com.koddev.dhaanChat.Notifications.Sender;

import retrofit2.Call;
import retrofit2.http.Body;
import retrofit2.http.Headers;
import retrofit2.http.POST;

public interface APIService {
    @Headers(
            {
                    "Content-Type:application/json",
                    "Authorization:key=AAAAtSxczMY:APA91bEBY2QG7nPf0g-52sqe_ns04fJDLAqruI4-_7s9cyuODDeE7FmnlZt0McxxLeu3jbf4vmJSig-2YwUlbtvujw3dzVcENXD3HoficlMqECce4HQA-OjgPaK2UZMAaMu0pMMya9Pl"
            }
    )

    @POST("fcm/send")
    Call<MyResponse> sendNotification(@Body Sender body);
}
