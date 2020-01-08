package com.allysoftsolutions.incomereport.Fragment;


import android.os.Bundle;
import android.support.v4.app.Fragment;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.CompoundButton;
import android.widget.EditText;
import android.widget.Switch;
import android.widget.TextView;
import android.widget.Toast;

import com.allysoftsolutions.incomereport.DAO.MycoredatabaseExpence;
import com.allysoftsolutions.incomereport.DAO.Mycoredatabaseincome;
import com.allysoftsolutions.incomereport.R;

import java.text.SimpleDateFormat;
import java.util.Date;


/**
 * A simple {@link Fragment} subclass.
 */
public class IncomeFragment extends Fragment {

    static final private String TAG = "Mohit";
    View v;
    Switch aSwitch;
    Button insert;

    EditText iteam, description, amount;
    MycoredatabaseExpence expence;
    Mycoredatabaseincome income;
    boolean b = true;

    public IncomeFragment() {
        // Required empty public constructor
    }


    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        // Inflate the layout for this fragment
        v = inflater.inflate(R.layout.fragment_income, container, false);
        aSwitch = v.findViewById(R.id.switch4);
        insert = v.findViewById(R.id.button3);
        iteam = v.findViewById(R.id.iteam);
        description = v.findViewById(R.id.description);
        amount = v.findViewById(R.id.amount);


        expence = new MycoredatabaseExpence(v.getContext());
        income = new Mycoredatabaseincome(v.getContext());


        aSwitch.setOnCheckedChangeListener(new CompoundButton.OnCheckedChangeListener() {
            @Override
            public void onCheckedChanged(CompoundButton buttonView, boolean isChecked) {

                if (isChecked) {
                    insert.setText(" Insert Expences");
                    b = true;

                } else {
                    insert.setText(" Insert income");
                    b = false;

                }

            }

        });

        insert.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                if (b) {
                    Expence();



                } else {


                    Income();
                }

            }
        });
        return v;
    }

    public void Expence() {

        try {
            SimpleDateFormat sdf = new SimpleDateFormat("dd-MM-yyyy");
            String date1 = sdf.format(new Date());
            expence.insertdata(iteam.getText().toString(), description.getText().toString(), Integer.parseInt(amount.getText().toString()), date1);


        } catch (Exception e) {
            Log.e(TAG, "onClick: ", e);
        }


    }

    public void Income() {
        try {
            SimpleDateFormat sdf1 = new SimpleDateFormat("dd-MM-yyyy");
            String date = sdf1.format(new Date());
            income.insertdata(iteam.getText().toString(), description.getText().toString(), Integer.parseInt(amount.getText().toString()), date);


        } catch (Exception e) {
            Log.e(TAG, "onClick: ", e);
        }

    }


}
