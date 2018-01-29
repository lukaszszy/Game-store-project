package com.student.tas;

import android.content.Intent;
import android.os.AsyncTask;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

import org.apache.http.HttpEntity;
import org.apache.http.HttpResponse;
import org.apache.http.client.HttpClient;
import org.apache.http.client.methods.HttpPost;
import org.apache.http.impl.client.DefaultHttpClient;
import org.apache.http.util.EntityUtils;

import java.io.IOException;

public class loginActivity extends AppCompatActivity {

    String buyGameID;
    String buyPrice;
    String buyTitle;

    String login = "";
    String password = "";
    String gameid = "";

    String buystatus = "";
    @Override
    protected void onCreate(Bundle savedInstanceState) {

        buyGameID = getIntent().getStringExtra("buyGameID");
        buyPrice = getIntent().getStringExtra("buyPrice");
        buyTitle = getIntent().getStringExtra("buyTitle");

        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);

        TextView gameInfo = (TextView) findViewById(R.id.textViewGameInfo);
        //gameInfo.setText(buyTitle+" za "+buyPrice+" PLN, o id="+buyGameID);
        gameInfo.setText(buyTitle+" za "+buyPrice+" PLN");
    }

    public void getLogin(){
        EditText etLogin = (EditText) findViewById(R.id.editTextLogin);
        EditText etPassword = (EditText) findViewById(R.id.editTextPassword);

        login = etLogin.getText().toString();
        password = etPassword.getText().toString();
        gameid = buyGameID;

        etPassword.setText("");
    }

    public void buyGame(View view){
        getLogin();
        int ready = 0;
        if(!login.equals(""))
            if(!password.equals(""))
                if(!gameid.equals(""))
                    ready = 1;

        if(ready==1) {
            String url = "http://arenaskilla.pl/_Vasto_Lorde/TAS/androidjson/buy_key.php?login=" + login + "&password=" + password + "&idgry=" + gameid;
            new startQuery().execute(url);
        }
        else{
            Toast.makeText(getBaseContext(),"Nie podano loginu i/lub hasla.", Toast.LENGTH_SHORT).show();
        }
    }

    public class startQuery extends AsyncTask<String, Void, Boolean> {

        @Override
        protected Boolean doInBackground(String... params) {
            try {
                HttpClient client = new DefaultHttpClient();
                HttpPost post = new HttpPost(params[0]);
                HttpResponse response = null;
                response = client.execute(post);

                int status = response.getStatusLine().getStatusCode();
                if(status==200) {
                    HttpEntity entity = response.getEntity();
                    String data = EntityUtils.toString(entity);
                    Log.d("QueryStatus", data);
                    buystatus = data;
                    return true;
                }
                else{
                    Toast.makeText(getBaseContext(),"Sprawdz polaczenie z internetem.", Toast.LENGTH_SHORT).show();
                }
            } catch (IOException e) {
                e.printStackTrace();
            }

            return false;
        }

        @Override
        protected void onPostExecute(Boolean aBoolean) {
            if(aBoolean){
                //TODO przejdz do kolejnego okna (info ze kupiles)
                Intent intent = new Intent(loginActivity.this, BoughtActivity.class);
                intent.putExtra("status", buystatus);
                startActivity(intent);
            }
            if(!aBoolean){
                //ERROR
                Toast.makeText(getBaseContext(),"ERROR", Toast.LENGTH_LONG).show();
            }

            super.onPostExecute(aBoolean);
        }
    }
}
