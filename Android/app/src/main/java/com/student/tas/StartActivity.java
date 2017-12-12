package com.student.tas;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.support.v7.widget.SearchView;
import android.view.View;
import android.webkit.WebView;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Spinner;
import android.widget.TextView;
import android.widget.Toast;

public class StartActivity extends AppCompatActivity {

    Spinner spinner;
    ArrayAdapter<CharSequence> adapter;
    String category;
    TextView tytul;

    @Override
    protected void onCreate(Bundle savedInstanceState) {


        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_start);

        spinner = (Spinner)findViewById(R.id.categorySpinner);
        adapter = ArrayAdapter.createFromResource(this, R.array.kategorie_array,android.R.layout.simple_spinner_item);
        adapter.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
        spinner.setAdapter(adapter);
        spinner.setOnItemSelectedListener(new AdapterView.OnItemSelectedListener() {
            @Override
            public void onItemSelected(AdapterView<?> parent, View view, int position, long id) {

                category = parent.getItemAtPosition(position).toString();
                //Toast.makeText(getBaseContext(),category +" wybrano", Toast.LENGTH_LONG).show();
            }

            @Override
            public void onNothingSelected(AdapterView<?> parent) {

            }


        });

        //WebView myWebView = (WebView) findViewById(R.id.webview);
        //myWebView.loadUrl("http://filipg-jenkins.wmi.amu.edu.pl/img/logo.png");




    }

    private String getSearchView(){
        String s;
        tytul = (TextView) findViewById(R.id.gameTitleEditText);
        s = tytul.getText().toString();
        if (s.equals("")){
            return "NULL";
        }
        return s;
    }

    public void searchClick(View view){
        String toastTitle = " oraz tytul "+getSearchView();
        if (getSearchView().equals("NULL")){
            toastTitle = "";
        }


        Toast.makeText(getBaseContext(),"Wyszukano kategorie "+category+toastTitle, Toast.LENGTH_LONG).show();
        Intent intent = new Intent(StartActivity.this, SearchedActivity.class);
        startActivity(intent);
    }

    public void webClick(View view){
        Intent intent = new Intent(StartActivity.this, WebActivity.class);
        startActivity(intent);
    }

}
