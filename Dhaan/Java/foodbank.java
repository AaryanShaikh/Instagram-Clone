package com.example.dhan;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.TextView;

public class foodbank extends AppCompatActivity {

    TextView donate_food,money_offline,money_online;
    Intent donate_food_intent,money_offline_intent,money_online_intent;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_foodbank);

        donate_food_intent = new Intent(foodbank.this, knowing_goonj.class);
        donate_food = (TextView)findViewById(R.id.donate_food_tv);
        donate_food.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(donate_food_intent);
            }
        });

        money_offline_intent = new Intent(foodbank.this, offline_donation_webview.class);
        money_offline = (TextView)findViewById(R.id.donate_money_offline_tv);
        money_offline.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(money_offline_intent);
            }
        });


        money_online_intent = new Intent(foodbank.this, patym_donation_webview.class);
        money_online = (TextView)findViewById(R.id.donate_money_paytm_tv);
        money_online.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(money_online_intent);
            }
        });


    }
}
