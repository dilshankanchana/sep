package DataAccess;

import android.content.Context;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;

/**
 * Created by Chamil on 8/12/2015.
 */
public class DbHelper extends SQLiteOpenHelper {

    private static final String dbName = "ScheduleDB";
    final String table1Name = "customer";
    private static final int dbVersion = 1;

    public DbHelper(Context context) {
        super(context, dbName, null, dbVersion);
    }

    @Override
    public void onCreate(SQLiteDatabase db) {
        db.execSQL("CREATE TABLE IF NOT EXISTS" + table1Name +
                "(firstName VARCHAR, lastName VARCHAR,email VARCHAR,contactNo VARCHAR, address VARCHAR);");
    }

    @Override
    public void onUpgrade(SQLiteDatabase db, int oldVersion, int newVersion) {
        db.execSQL("DROP TABLE IF EXISTS" + table1Name);
        onCreate(db);
    }

    public void create(SQLiteDatabase db) {
        db.execSQL("INSERT INTO "+table1Name+"customer VALUES('Mahinda','Rajapaksha','mahinda@gmail.com','0716123456','No,23,Madamulana,Hambanthotha');");
    }
}
