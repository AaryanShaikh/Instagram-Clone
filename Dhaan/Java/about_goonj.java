package com.example.dhan;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.ImageView;
import android.widget.TextView;

public class about_goonj extends AppCompatActivity {
    TextView  knowning_goonj,initiatives,founders,offices,dropping_centers,stories,awards,faqs;
    Intent knowning_goonj_intent,initiatives_intent,founders_intent,offices_intent,dropping_centers_intent,
    stories_intent,awards_intent,faqs_intent;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_about_goonj);

        knowning_goonj_intent = new Intent(about_goonj.this, knowing_goonj.class);
        knowning_goonj = (TextView)findViewById(R.id.knowning_goonj_tv);
        knowning_goonj.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(knowning_goonj_intent);
            }
        });



        initiatives_intent = new Intent(about_goonj.this, goonj_initiatives.class);
        initiatives = (TextView)findViewById(R.id.initiatives_goonj_tv);
        initiatives.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(initiatives_intent);
            }
        });


        founders_intent = new Intent(about_goonj.this, goonj_founders.class);
        founders = (TextView)findViewById(R.id.founders_goonj_tv);
        founders.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(founders_intent);
            }
        });

        offices_intent = new Intent(about_goonj.this, goonj_offices.class);
        offices = (TextView)findViewById(R.id.offices_goonj_tv);
        offices.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(offices_intent);
            }
        });


        dropping_centers_intent = new Intent(about_goonj.this, dropping_centers.class);
        dropping_centers = (TextView)findViewById(R.id.dropping_center_goonj_tv);
        dropping_centers.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(dropping_centers_intent);
            }
        });

        stories_intent = new Intent(about_goonj.this, donation_stories.class);
        stories = (TextView)findViewById(R.id.stories_goonj_tv);
        stories.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(stories_intent);
            }
        });


        awards_intent = new Intent(about_goonj.this, awards_and_recog.class);
        awards = (TextView)findViewById(R.id.awards_goonj_tv);
        awards.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(awards_intent);
            }
        });

        faqs_intent = new Intent(about_goonj.this, faqs_webview.class);
        faqs = (TextView)findViewById(R.id.faqs_goonj_tv);
        faqs.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(faqs_intent);
            }
        });

    }


}
