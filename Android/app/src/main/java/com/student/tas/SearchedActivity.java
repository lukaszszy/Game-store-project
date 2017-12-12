package com.student.tas;

import android.content.Intent;
import android.graphics.Bitmap;
import android.graphics.BitmapFactory;
import android.os.AsyncTask;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.ImageView;
import android.widget.TextView;

import com.squareup.picasso.Picasso;

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
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.net.MalformedURLException;
import java.net.URL;
import java.util.ArrayList;


public class SearchedActivity extends AppCompatActivity {

    String url = "http://arenaskilla.pl/_Vasto_Lorde/TAS/android/get_all_products.php";
    int counter=0;
    int max=0;

    //DB
    ArrayList<String> titleList = new ArrayList<String>();
    ArrayList<String> priceList = new ArrayList<String>();
    ArrayList<String> companyList = new ArrayList<String>();
    ArrayList<String> descriptionList = new ArrayList<String>();

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        new ActorsAsynTask().execute(url);
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_searched);
    }

    public void buy(View view){
        Intent intent = new Intent(SearchedActivity.this, loginOrRegisterActivity.class);
        startActivity(intent);
    }

    public void nextGame(View view){
        if(counter==(max-1)){

        }else{
            counter++;
        }

        //wyswietl...
        refresh();
    }
    public void prevGame(View view){
        if (counter<1){

        }else{
            counter--;
        }

        //wyswietl...
        refresh();
    }

    public void refresh(){
        String imageURL = "http://arenaskilla.pl/_Vasto_Lorde/TAS/templates/images/"+(counter+1)+".jpg";
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
    }


    public void setFirstRefresh(){
        String imageURL = "http://arenaskilla.pl/_Vasto_Lorde/TAS/templates/images/"+(counter+1)+".jpg";
        ImageView img = (ImageView)findViewById(R.id.gameImageView);
        Picasso.with(getApplicationContext()).load(imageURL).into(img);

        TextView gamecounter = (TextView)findViewById(R.id.gameCounter);
        gamecounter.setText((1)+" z "+(max));

        TextView title = (TextView)findViewById(R.id.nazwaTextView);
        title.setText(titleList.get(0));

        TextView price = (TextView)findViewById(R.id.cenaTextView);
        price.setText(priceList.get(0));

        TextView company = (TextView)findViewById(R.id.companytextView);
        company.setText(companyList.get(0));

        TextView description = (TextView)findViewById(R.id.opisTextView);
        description.setText(descriptionList.get(0));
    }







    public class ActorsAsynTask extends AsyncTask<String, Void, Boolean> {

        @Override
        protected Boolean doInBackground(String... params) {
            try {
                HttpClient client = new DefaultHttpClient();
                HttpPost post = new HttpPost(params[0]);
                HttpResponse response = client.execute(post);

                //int status = 0;
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
                    }

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
                //show message user: fail.
            }
            else{
                //ActorAdapter adapter = new ActorAdapter(getApplicationContext(), R.layout.row, actorsList);
                //list.setAdapter(adapter);
            }
        }
    }

}
