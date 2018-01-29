package com.student.tas;

import android.app.ProgressDialog;
import android.content.Context;
import android.content.Intent;
import android.content.SharedPreferences;
import android.content.pm.PackageManager;
import android.graphics.Bitmap;
import android.graphics.BitmapFactory;
import android.os.AsyncTask;
import android.os.Environment;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.ImageView;
import android.widget.TextView;

import com.squareup.picasso.Picasso;

import org.apache.commons.net.ftp.FTP;
import org.apache.commons.net.ftp.FTPClient;
import org.apache.http.HttpEntity;
import org.apache.http.HttpResponse;
import org.apache.http.client.HttpClient;
import org.apache.http.client.methods.HttpPost;
import org.apache.http.impl.client.DefaultHttpClient;
import org.apache.http.params.BasicHttpParams;
import org.apache.http.util.EntityUtils;
import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.io.BufferedReader;
import java.io.File;
import java.io.FileInputStream;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.net.MalformedURLException;
import java.net.URL;
import java.util.ArrayList;


public class SearchedActivity extends AppCompatActivity {

    String url ="NULL";
    int counter=0;
    int max=0;
    String searchedTitle = "NULL";
    String searchedCategory = "NULL";

    String buyPrice = "-1";
    String buyGameID = "-1";
    String buyTitle = "-1";

    //DB
    ArrayList<String> titleList = new ArrayList<String>();
    ArrayList<String> priceList = new ArrayList<String>();
    ArrayList<String> companyList = new ArrayList<String>();
    ArrayList<String> descriptionList = new ArrayList<String>();
    ArrayList<String> idList = new ArrayList<>();

    @Override
    protected void onCreate(Bundle savedInstanceState) {

        searchedCategory = getIntent().getStringExtra("categoryy");
        if(!getIntent().getStringExtra("titlee").equals("NULL")){
            searchedTitle = getIntent().getStringExtra("titlee");
            url = "http://arenaskilla.pl/_Vasto_Lorde/TAS/androidjson/get_product_details.php?title="+searchedTitle;
        }else{
            url = "http://arenaskilla.pl/_Vasto_Lorde/TAS/androidjson/get_all_products.php";
            if(!searchedCategory.equals("Wszystkie")){
                url = "http://arenaskilla.pl/_Vasto_Lorde/TAS/androidjson/get_all_"+searchedCategory+".php";
            }
        }

        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_searched);

        new ActorsAsynTask().execute(url);
    }

    public void buy(View view){
        Intent intent = new Intent(SearchedActivity.this, loginOrRegisterActivity.class);
        intent.putExtra("buyGameID",buyGameID);
        intent.putExtra("buyPrice",buyPrice);
        intent.putExtra("buyTitle",buyTitle);
        startActivity(intent);
    }

    public void nextGame(View view){
        if(counter==(max-1)){

        }else{
            counter++;
        }

        refresh();
    }
    public void prevGame(View view){
        if (counter<1){

        }else{
            counter--;
        }

        refresh();
    }

    public void refresh(){
        String imageURL = "http://arenaskilla.pl/_Vasto_Lorde/TAS/templates/images/"+(idList.get(counter))+".jpg";
        ImageView img = (ImageView)findViewById(R.id.gameImageView);
        Picasso.with(getApplicationContext()).load(imageURL).into(img);

        String listtitle = titleList.get(counter);
        String listprice = priceList.get(counter);
        String listcompany = companyList.get(counter);
        String listdescription = descriptionList.get(counter);

        TextView gamecounter = (TextView)findViewById(R.id.gameCounter);
        gamecounter.setText((counter+1)+" z "+(max));

        TextView title = (TextView)findViewById(R.id.nazwaTextView);
        title.setText(listtitle);

        TextView price = (TextView)findViewById(R.id.cenaTextView);
        price.setText(listprice);

        TextView company = (TextView)findViewById(R.id.companytextView);
        company.setText(listcompany);

        TextView description = (TextView)findViewById(R.id.opisTextView);
        description.setText(listdescription);


        Button poprzedni = (Button)findViewById(R.id.button2);
        Button nastepny = (Button)findViewById(R.id.button);
        if(counter==0){
            poprzedni.setVisibility(View.INVISIBLE);
        }else{
            poprzedni.setVisibility(View.VISIBLE);
        }
        if(counter+1==max){
            nastepny.setVisibility(View.INVISIBLE);
        }
        else{
            nastepny.setVisibility(View.VISIBLE);
        }

        buyGameID = idList.get(counter);
        buyPrice = listprice;
        buyTitle = listtitle;
    }

    /*
    String database="NULL";
    public void sendFile() throws Exception{

        try {
            Context contt;
            Log.d("SP", "1");
            contt = createPackageContext("com.student.backup", 0);
            SharedPreferences pref = contt.getSharedPreferences("backup", Context.MODE_PRIVATE);
            //String data;//= pref.getString("contact","Default");
            int count = pref.getInt("count", -1);
            Log.d("SP", "2");

            for (int i=0;i<count;i++){
                database = database +"\n"+ pref.getString("contact"+i, "NULL");
            }
            Log.d("SP", "3");
            Log.d("DB", database);
            //Log.d("SHAREDPREFERENCES", data);
            //displaySharedValue.setText(data);
        }catch (PackageManager.NameNotFoundException e) {
            Log.e("Not data shared", e.toString());
        }

        File path = getApplicationContext().getFilesDir();
        File file = new File(path, "config.txt");
        FileOutputStream stream = new FileOutputStream(file);
        try {
            stream.write(database.getBytes());
        }
        finally{
            stream.close();
        }

        FTPClient con = null;

        try
        {
            Log.d("FTP", "1");
            con = new FTPClient();
            Log.d("FTP", "2");
            con.connect("mkwk018.cba.pl");
            Log.d("FTP", "3");


            if (con.login("test123@janczura.cba.pl", "Test123"))
            {
                Log.d("FTP", "4");
                con.enterLocalPassiveMode(); // important!
                Log.d("FTP", "5");
                con.setFileType(FTP.BINARY_FILE_TYPE);
                Log.d("FTP", "6");
                //getFilesDir().toString()+"/defaultbackupname.vcf";
                String data; //= getFilesDir().toString()+"/defaultbackupname.vcf";
                data = getFilesDir().toString()+"/config.txt";
                Log.d("FTP", "7");

                FileInputStream in = new FileInputStream(new File(data));
                Log.d("FTP", "8");
                boolean result = con.storeFile("/DB.txt", in);
                Log.d("FTP", "9");
                in.close();
                if (result) Log.d("FTP", "10 UDALO SIE");
                con.logout();
                Log.d("FTP", "11");
                con.disconnect();
                Log.d("FTP", "12");
            }
        }
        catch (Exception e)
        {
            Log.d("FTP", "Sorry, wyjatek!");
            e.printStackTrace();
        }
    }
*/


    public class ActorsAsynTask extends AsyncTask<String, Void, Boolean> {
        ProgressDialog progress;

        protected void onPreExecute(){
            progress = new ProgressDialog(SearchedActivity.this);
            progress.setMessage("Pobieranie danych.... ");
            progress.setProgressStyle(ProgressDialog.STYLE_SPINNER);
            progress.setIndeterminate(true);
            progress.setProgress(0);
            progress.show();
        }

        @Override
        protected Boolean doInBackground(String... params) {
            try {

                //TU start
/*
                Log.d("FTP", "Zaczynam");
                try {
                    //sendFile();
                } catch (Exception e) {
                    Log.d("FTP", "EXCEPTION ! ! !");
                    e.printStackTrace();
                }
                Log.d("FTP", "Koniec");
*/
                //TU koniec


                HttpClient client = new DefaultHttpClient();
                HttpPost post = new HttpPost(params[0]);
                HttpResponse response = client.execute(post);

                int status = response.getStatusLine().getStatusCode();
                if(status==200){
                    HttpEntity entity = response.getEntity();
                    String data = EntityUtils.toString(entity);

                    JSONObject jObj = new JSONObject(data);
                    JSONArray jArray = jObj.getJSONArray("products");
                    max = jArray.length();

                    for(int i=0; i<jArray.length(); i++){

                        JSONObject jRealObject = jArray.getJSONObject(i);
                        titleList.add(i,jRealObject.getString("name"));
                        priceList.add(i,jRealObject.getString("price"));
                        companyList.add(i,jRealObject.getString("company"));
                        descriptionList.add(i,jRealObject.getString("description"));
                        idList.add(i,jRealObject.getString("Game_ID"));
                    }


                    progress.dismiss();
                    return true;
                }


            } catch (IOException e) {
                e.printStackTrace();
            } catch (JSONException e) {
                e.printStackTrace();
            }



            return false;
        }

        @Override
        protected void onPostExecute(Boolean result) {
            super.onPostExecute(result);

            if(result == false){
                progress.dismiss();
                //show message user: fail.
            }
            else{

                Button b1 = (Button)findViewById(R.id.button);
                Button b2 = (Button)findViewById(R.id.button2);
                Button b3 = (Button)findViewById(R.id.button3);

                b1.setVisibility(View.VISIBLE);
                b2.setVisibility(View.VISIBLE);
                b3.setVisibility(View.VISIBLE);

                refresh();
                progress.dismiss();

            }
        }
    }
}
