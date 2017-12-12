package com.student.tas;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;

public class loginOrRegisterActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login_or_register);
    }

    public void login(View view){
        Intent intent = new Intent(loginOrRegisterActivity.this, loginActivity.class);
        startActivity(intent);
    }

    public void register(View view){
        Intent intent = new Intent(loginOrRegisterActivity.this, registerActivity.class);
        startActivity(intent);
    }
}
