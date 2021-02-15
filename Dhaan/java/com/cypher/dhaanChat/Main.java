package com.koddev.dhaanChat;

import android.content.Intent;
import android.os.Bundle;
import android.support.annotation.NonNull;
import android.support.design.widget.BottomNavigationView;
import android.support.design.widget.NavigationView;
import android.support.v4.app.Fragment;
import android.support.v4.app.FragmentManager;
import android.support.v4.view.GravityCompat;
import android.support.v4.widget.DrawerLayout;
import android.support.v7.app.ActionBarDrawerToggle;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.Toolbar;
import android.view.MenuItem;
import android.view.View;
import android.widget.ImageButton;
import android.widget.Toast;

/*import androidx.annotation.NonNull;
import androidx.appcompat.app.ActionBarDrawerToggle;
import androidx.appcompat.app.AppCompatActivity;
import androidx.appcompat.widget.Toolbar;
import androidx.core.view.GravityCompat;
import androidx.drawerlayout.widget.DrawerLayout;
import androidx.fragment.app.Fragment;*/

/*import com.google.android.material.bottomnavigation.BottomNavigationView;
import com.google.android.material.navigation.NavigationView;*/
import com.koddev.dhaanChat.Fragments.ProfileFragment;
import com.koddev.dhaanChat.MainActivity;
import com.koddev.dhaanChat.MessageFragment;
import com.koddev.dhaanChat.R;

public class Main extends AppCompatActivity implements NavigationView.OnNavigationItemSelectedListener {

    ImageButton notification;
    Intent notification_intent;
    private DrawerLayout drawer;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_maina);

        java.text.DateFormat dateFormat = android.text.format.DateFormat.getDateFormat(getApplicationContext());

        Toolbar toolbar=findViewById(R.id.toolbar);
        setSupportActionBar(toolbar);

        notification_intent = new Intent(Main.this, notification_alert.class);
        notification=(ImageButton)findViewById(R.id.toolbar_notification);
        notification.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(notification_intent);
            }
        });

        drawer=findViewById(R.id.drawer_layout);
        NavigationView navigationView =findViewById(R.id.nav_view);
        navigationView.setNavigationItemSelectedListener(this);

        ActionBarDrawerToggle toggle=new ActionBarDrawerToggle(this,drawer,toolbar,
                R.string.navigation_drawer_open,R.string.navigation_drawer_close);

        drawer.addDrawerListener(toggle);
        toggle.syncState();

        /*BottomNavigationView bottomNav=findViewById(R.id.bottom_navigation);
        bottomNav.setOnNavigationItemSelectedListener(navListener);*/

        if (savedInstanceState == null) {
            getFragmentManager().beginTransaction().replace(R.id.fragment_container,
                    new HomeFragment()).commit();}


    }
    @Override
    public boolean onNavigationItemSelected(@NonNull MenuItem item){
        switch(item.getItemId()){
            case R.id.nav_profile:
                getSupportFragmentManager().beginTransaction().replace(R.id.fragment_container,
                        new ProfileFragment()).commit();
                break;
            case R.id.nav_message:
                /*getFragmentManager().beginTransaction().replace(R.id.fragment_container,
                        new MessageFragment()).commit();*/
                Intent intent = new Intent(Main.this,MainActivity.class);
                startActivity(intent);
                break;
            case R.id.nav_chat:
                getFragmentManager().beginTransaction().replace(R.id.fragment_container,
                        new ChatFragment()).commit();
                break;
            case R.id.nav_share:
                /*Toast.makeText(this,"Share",Toast.LENGTH_SHORT).show();*/
                Intent intent1 = new Intent(Intent.ACTION_SEND);
                intent1.setType("text/plain");
                startActivity(Intent.createChooser(intent1,"Share using"));
                break;
            case R.id.nav_logout:
                Toast.makeText(this,"Log-out",Toast.LENGTH_SHORT).show();
                break;
        }
        drawer.closeDrawer(GravityCompat.START);

        return true;
    }


    @Override
    public void onBackPressed(){
        if (drawer.isDrawerOpen(GravityCompat.START)){
            drawer.closeDrawer(GravityCompat.START);

        }else {
            super.onBackPressed();}
    }

    private BottomNavigationView.OnNavigationItemSelectedListener navListener =
            new BottomNavigationView.OnNavigationItemSelectedListener() {
                @Override
                public boolean onNavigationItemSelected(@NonNull MenuItem item) {
                    Fragment selectedFragment =null;
                    switch (item.getItemId()) {
                        case R.id.nav_home:
                            selectedFragment = new Fragment();
                            break;
//                        case R.id.nav_search:
//                            selectedFragment = new SearchFragment();
//                            break;
                        /*case R.id.nav_cart:
                            selectedFragment = new Fragment();
                            break;*/

                    }
                    getSupportFragmentManager().beginTransaction().replace(R.id.fragment_container,
                            selectedFragment).commit();
                    return true;
                }
            };
}