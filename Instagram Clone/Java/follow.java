package com.cypher.instagramclone;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.ImageButton;

public class follow extends AppCompatActivity {

    ImageButton search1,home,profile1,add;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_follow);

        search1 = findViewById(R.id.search);
        home = findViewById(R.id.home1);
        profile1 = findViewById(R.id.profile1);
        add = findViewById(R.id.add);

        add.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(follow.this,gallery.class);
                startActivity(intent);
            }
        });
        search1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(follow.this,search.class);
                startActivity(intent);
            }
        });

        profile1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(follow.this,profile.class);
                startActivity(intent);
            }
        });

        home.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(follow.this,MainActivity.class);
                startActivity(intent);
            }
        });

    }
}
