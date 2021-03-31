package com.cypher.hexconverter;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ImageButton;
import android.widget.TextView;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {

    ImageButton cal;
    EditText red, green, blue;
    TextView res;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        cal = (ImageButton) findViewById(R.id.cal);
        red = (EditText) findViewById(R.id.red);
        green = (EditText) findViewById(R.id.green);
        blue = (EditText) findViewById(R.id.blue);
        res = (TextView) findViewById(R.id.res);

        cal.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                String sr = red.getText().toString();
                String sg = green.getText().toString();
                String sb = blue.getText().toString();
                if (sr.matches("")||sg.matches("")||sb.matches("")) {
                    Toast.makeText(MainActivity.this,"Please enter all the RGB Values",Toast.LENGTH_LONG).show();
                }
                else {
                    int r = Integer.parseInt(sr);
                    int g = Integer.parseInt(sg);
                    int b = Integer.parseInt(sb);
                    String hex = String.format("#%02x%02x%02x", r, g, b);
                    res.setText(hex);
                }
            }
        });
    }
}
