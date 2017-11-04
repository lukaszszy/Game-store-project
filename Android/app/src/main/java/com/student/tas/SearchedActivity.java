package com.student.tas;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;

public class SearchedActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_searched);
    }

    public void buy(View view){
        Intent intent = new Intent(SearchedActivity.this, loginOrRegisterActivity.class);
        startActivity(intent);
    }
}
