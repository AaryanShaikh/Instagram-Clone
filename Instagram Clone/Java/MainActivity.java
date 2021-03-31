package com.cypher.instagramclone;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.preference.PreferenceManager;
import android.view.View;
import android.widget.ImageButton;
import android.widget.RelativeLayout;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {

    ImageButton search1, heart, profile1, msg, add, igtv, storybtn, inst;
    private SharedPreferences mSharedPreferences;
    private SharedPreferences.Editor mEditor;
    private boolean isPreviouslyOpened;

    @Override
    protected void onStop() {
        super.onStop();
        mEditor.putBoolean("isPreviouslyOpened", isPreviouslyOpened).apply();
    }

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        search1 = findViewById(R.id.search);
        heart = findViewById(R.id.heart);
        profile1 = findViewById(R.id.profile1);
        msg = findViewById(R.id.msg);
        add = findViewById(R.id.add);
        igtv = findViewById(R.id.igtv);
        storybtn = findViewById(R.id.storybtn);
        inst = findViewById(R.id.instagram);

        mSharedPreferences = PreferenceManager.getDefaultSharedPreferences(this);
        mEditor = mSharedPreferences.edit();
        isPreviouslyOpened = mSharedPreferences.getBoolean("isPreviouslyOpened", false);

        if (!isPreviouslyOpened) {
            Toast.makeText(MainActivity.this, "Long press on Instagram to see User Manual!", Toast.LENGTH_LONG).show();
            isPreviouslyOpened = true;
        }



        inst.setOnLongClickListener(new View.OnLongClickListener() {
            @Override
            public boolean onLongClick(View v) {
                Intent intent = new Intent(MainActivity.this,info.class);
                startActivity(intent);
                return true;
            }
        });

        storybtn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(MainActivity.this,story.class);
                startActivity(intent);
            }
        });

        igtv.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(MainActivity.this,igtv.class);
                startActivity(intent);
            }
        });

        add.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(MainActivity.this,gallery.class);
                startActivity(intent);
            }
        });

        msg.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(MainActivity.this,message.class);
                startActivity(intent);
            }
        });

        search1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(MainActivity.this,search.class);
                startActivity(intent);
            }
        });

        profile1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(MainActivity.this,profile.class);
                startActivity(intent);
            }
        });

        heart.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(MainActivity.this,follow.class);
                startActivity(intent);
            }
        });


    }
}
