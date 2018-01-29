package com.student.tas;

import android.content.Intent;
import android.os.AsyncTask;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.EditText;
import android.widget.Toast;

import org.apache.http.HttpEntity;
import org.apache.http.HttpResponse;
import org.apache.http.client.HttpClient;
import org.apache.http.client.methods.HttpPost;
import org.apache.http.impl.client.DefaultHttpClient;
import org.apache.http.util.EntityUtils;

import java.io.IOException;
import java.util.regex.Pattern;

public class registerActivity extends AppCompatActivity {

    int goNext = 0;
    String login = "";
    String email = "";
    String password = "";
    String data="";
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_register);
    }

    public class startQuery extends AsyncTask<String, Void, Boolean> {

        @Override
        protected Boolean doInBackground(String... params) {
            try {
                HttpClient client = new DefaultHttpClient();
                HttpPost post = new HttpPost(params[0]);
                HttpResponse response = client.execute(post);

                int status = response.getStatusLine().getStatusCode();
                if(status==200) {
                    HttpEntity entity = response.getEntity();
                    data = EntityUtils.toString(entity);
                    data = data.substring(3);
                    Log.d("QueryStatus", data);
                    return true;
                }
                else{
                    Toast.makeText(getBaseContext(),"Sprawdz polaczenie z internetem", Toast.LENGTH_SHORT).show();
                }
            } catch (IOException e) {
                e.printStackTrace();
            }

            return false;
        }

        @Override
        protected void onPostExecute(Boolean aBoolean) {
            if(aBoolean){
                Toast.makeText(getBaseContext(),data, Toast.LENGTH_LONG).show();
                //TODO przejdz do kolejnego okna (info ze kupiles)
                //Intent intent = new Intent(registerActivity.this, loginActivity.class);
                //startActivity(intent);
            }
            if(!aBoolean){
                //ERROR
                Toast.makeText(getBaseContext(),"ERROR", Toast.LENGTH_LONG).show();
            }

            //super.onPostExecute(aBoolean);
        }
    }

    public static final Pattern EMAIL_ADDRESS_PATTERN = Pattern.compile(
            "[a-zA-Z0-9\\+\\.\\_\\%\\-\\+]{1,256}" +
                    "\\@" +
                    "[a-zA-Z0-9][a-zA-Z0-9\\-]{0,64}" +
                    "(" +
                    "\\." +
                    "[a-zA-Z0-9][a-zA-Z0-9\\-]{0,25}" +
                    ")+"
    );

    private boolean checkEmail(String email) {
        return EMAIL_ADDRESS_PATTERN.matcher(email).matches();
    }

    public void getData(View view){
        goNext = 1;
        EditText etLogin = (EditText) findViewById(R.id.editTextLogin);
        EditText etEmail = (EditText) findViewById(R.id.editTextMail);
        EditText etPassword = (EditText) findViewById(R.id.editTextPassword);
        EditText etPassword2 = (EditText) findViewById(R.id.editTextPassword2);

        login = etLogin.getText().toString();
        email = etEmail.getText().toString();
        password = etPassword.getText().toString();

        if(!password.equals(etPassword2.getText().toString())) {goNext = 0; Toast.makeText(getBaseContext(),"Hasla nie sa takie same.", Toast.LENGTH_SHORT).show();
            etPassword.setText("");
            etPassword2.setText("");
        }
        if(password.isEmpty()) {goNext = 0; Toast.makeText(getBaseContext(),"Nie wpisales hasla", Toast.LENGTH_SHORT).show();}
        if(email.equals("")) {goNext = 0; Toast.makeText(getBaseContext(),"Nie wpisales adresu email", Toast.LENGTH_SHORT).show();}
        if(login.equals("")) {goNext = 0; Toast.makeText(getBaseContext(),"Nie wpisales loginu", Toast.LENGTH_SHORT).show();}
        if(!login.matches("[a-zA-Z0-9]*")){goNext = 0; Toast.makeText(getBaseContext(), "Login musi zawierac tylko litery i cyfry.", Toast.LENGTH_SHORT).show();}
        if(password.length()<6){goNext=0; Toast.makeText(getBaseContext(),"Haslo musi miec conajmniej 6 znakow.", Toast.LENGTH_SHORT).show();}
        if(password.contains(" ")){goNext=0; Toast.makeText(getBaseContext(),"Haslo nie moze zawierac spacji.", Toast.LENGTH_SHORT).show();}
        if(!checkEmail(email)){goNext=0; Toast.makeText(getBaseContext(),"Wprowadz poprawny email.", Toast.LENGTH_SHORT).show();}
    }

    public void register(View view){
        getData(view);
        if(goNext==1)
        {
            String url = "http://arenaskilla.pl/_Vasto_Lorde/TAS/androidjson/register.php?name="+login+"&email="+email+"&password="+password;
            new startQuery().execute(url);
        }
    }



}
