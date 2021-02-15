package com.koddev.dhaanChat;

import android.app.Fragment;
import android.content.Intent;
import android.os.Bundle;
import android.support.annotation.NonNull;
import android.support.annotation.Nullable;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.LinearLayout;

/*import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.fragment.app.Fragment;*/

import de.hdodenhof.circleimageview.CircleImageView;

public class HomeFragment extends Fragment {

    ImageView goonj_iv;
    CircleImageView one_cv,two_cv,three_cv,four_cv,five_cv,six_cv,seven_cv,eight_cv,nine_cv;
    Intent goonj_intent,one_intent,two_intent,three_intent,four_intent,five_intent,six_intent,seven_intent,eight_intent,nine_intent;
    @Nullable
    @Override
    public View onCreateView(@NonNull LayoutInflater inflater, @Nullable ViewGroup container, @Nullable Bundle savedInstanceState) {
        View rootview = inflater.inflate(R.layout.fragment_home, container, false);

        goonj_intent = new Intent(getActivity(), about_goonj.class);
        goonj_iv = (ImageView) rootview.findViewById(R.id.goonj_iv);
        goonj_iv.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(goonj_intent);
            }
        });

        one_intent = new Intent(getActivity(), sethu_layout.class);
        one_cv = (CircleImageView) rootview.findViewById(R.id.one_iv);
        one_cv.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(one_intent);
            }
        });


        two_intent = new Intent(getActivity(), triveni_layout.class);
        two_cv = (CircleImageView) rootview.findViewById(R.id.two_iv);
        two_cv.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(two_intent);
            }
        });


        three_intent = new Intent(getActivity(), sangath_layout.class);
        three_cv = (CircleImageView) rootview.findViewById(R.id.three_iv);
        three_cv.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(three_intent);
            }
        });



        four_intent = new Intent(getActivity(), sathguru_layout.class);
        four_cv = (CircleImageView) rootview.findViewById(R.id.four_iv);
        four_cv.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(four_intent);
            }
        });



        five_intent = new Intent(getActivity(), all_india_layout.class);
        five_cv = (CircleImageView) rootview.findViewById(R.id.five_iv);
        five_cv.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(five_intent);
            }
        });


        six_intent = new Intent(getActivity(), eves_layout.class);
        six_cv = (CircleImageView) rootview.findViewById(R.id.six_iv);
        six_cv.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(six_intent);
            }
        });



        seven_intent = new Intent(getActivity(), sangarsh_layout.class);
        seven_cv = (CircleImageView) rootview.findViewById(R.id.seven_iv);
        seven_cv.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(seven_intent);
            }
        });


        eight_intent = new Intent(getActivity(), shri_layout.class);
        eight_cv = (CircleImageView) rootview.findViewById(R.id.eight_iv);
        eight_cv.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(eight_intent);
            }
        });



        nine_intent = new Intent(getActivity(), green_cross_layout.class);
        nine_cv = (CircleImageView) rootview.findViewById(R.id.nine_iv);
        nine_cv.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(nine_intent);
            }
        });

        return rootview;
    }

}
