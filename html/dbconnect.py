import mysql.connector
from mysql.connector import Error
from datetime import datetime, date, time

try :
    # 커넥터로부터 커넥션을 받는다.
    connection = mysql.connector.connect (
        host = '127.0.0.1',
        database = 'random',
        user = 'root',
        password = 'It12345!'
    )

    if connection.is_connected() :
        print('연결성공')
        db_info = connection.get_server_info()
        print('MySQL server version : ', db_info)

        # 커서를 가져온다
        cursor = connection.cursor()

        # 원하는 내용을 실행(주로 insert, select 업데이트 등을 함)
        query = '''
                INSERT INTO winner SELECT * FROM user ORDER BY RAND() LIMIT 3;
                '''
        cursor.execute(query)
        connection.commit()

        # 데이터 호출 및 데이터 프레임화
        record = cursor.fetchall()
        # print(record)

        for data in record:
            print(data)

except Error as e:
    print('DB 관련 에러발생',e)

finally :
    # 모든 데이터 베이스 실행 명령을 끝냈으면 커서와 커넥션을 모두 닫기
    cursor.close()
    connection.close()
    print('MySQL 커넥션 종료')

