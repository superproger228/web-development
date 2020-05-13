PROGRAM WorkWithQueryString(INPUT, OUTPUT);
USES
DOS;

FUNCTION GetQueryStringParameter(Selected: STRING): STRING;
VAR
  Input, Value: STRING;
  SelectedPos, I: INTEGER;
BEGIN
  Value := '';
  Input := GetEnv('QUERY_STRING');
  SelectedPos := POS(Selected, Input) + Length(Selected) + 1;
  FOR I := SelectedPos TO Length(Input)
    DO
    BEGIN
      IF (Input[I] = '&')
      THEN
        BREAK;
      Value := Value + Input[I];
    END;
  GetQueryStringParameter := Value
END;

BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;
  WRITELN('First Name: ', GetQueryStringParameter('first_name'));
  WRITELN('Last Name: ', GetQueryStringParameter('last_name'));
  WRITELN('Age: ', GetQueryStringParameter('age'))
END.
