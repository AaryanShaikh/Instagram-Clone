package com.example.dhan;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.TextView;

public class aashayein extends AppCompatActivity {
    TextView donate_material,money_offline,money_online;
    Intent donate_material_intent,money_offline_intent,money_online_intent;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_aashayein);

        donate_material_intent = new Intent(aashayein.this, knowing_goonj.class);
        donate_material = (TextView)findViewById(R.id.donate_material_tv);
        donate_material.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(donate_material_intent);
            }
        });

        money_offline_intent = new Intent(aashayein.this, offline_donation_webview.class);
        money_offline = (TextView)findViewById(R.id.donate_money_offline_tv);
        money_offline.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(money_offline_intent);
            }
        });


        money_online_intent = new Intent(aashayein.this, patym_donation_webview.class);
        money_online = (TextView)findViewById(R.id.donate_money_paytm_tv);
        money_online.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(money_online_intent);
            }
        });

    }
}
