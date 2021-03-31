package com.cypher.instagramclone;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.ImageButton;
import android.widget.Toast;

public class disclaimer extends AppCompatActivity {

    ImageButton strt;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_disclaimer);

        strt = findViewById(R.id.strt);

        Toast.makeText(disclaimer.this,"This clone is created by Aaryan Shaikh!",Toast.LENGTH_LONG).show();
        strt.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(disclaimer.this,MainActivity.class);
                startActivity(intent);
            }
        });

    }
}
